<?php

namespace Lazerg\LaravelMacros;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Lazerg\LaravelMacros\Services\Math;
use Throwable;

class LaravelMacrosServiceProvider extends ServiceProvider
{
    /**
     * @return void
     * @throws Throwable
     */
    public function boot()
    {
        $this->app->singleton('math', function () {
            return new Math();
        });

        $directories = File::directories(__DIR__ . '/Macros');

        foreach ($directories as $directory) {
            $files = File::allFiles($directory);

            foreach ($files as $file) {
                $facade_name = Str::afterLast($directory, '/');
                $facade_class = $this->getFacadeClass($facade_name);

                $macro_name = $file->getFilenameWithoutExtension();
                $macro_class_name = $this->getMacroClass($facade_name, $macro_name);

                $macro = (new $macro_class_name)->macro();

                call_user_func_array([$facade_class, 'macro'], [Str::camel($macro_name), $macro]);
            }
        }
    }

    public function getFacadeClass(string $facade_name)
    {
        $possible_paths = [
            "\\Illuminate\\Support\\$facade_name",
            "\\Illuminate\\Support\\Facades\\$facade_name",
        ];

        foreach ($possible_paths as $possible_path) {
            if (class_exists($possible_path)) {
                return $possible_path;
            }
        }
    }

    public function getMacroClass(string $facade_name, string $macro_name): string
    {
        return "\\Lazerg\\LaravelMacros\\Macros\\$facade_name\\$macro_name";
    }
}
