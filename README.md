# WinPre

<!-- ABOUT THE PROJECT -->
## About The Project

WinPre is a library for [NativePHP](https://nativephp.com/).
It aims at helping you with orchestrating a application with multiple windows. 

<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

Before you are able to install the package you will need to meet these requirements:

- Running a application with `laravel/framework` version 11 or higher.
- Running a application with `nativephp/laravel` version 0.6.2 or higher.

### Installation

1. To install WinPre in the root  of your project run:
   ```sh
   composer require jcombee/nativephp-win-pre
   ```
2. You can now publish the example preset file (`routes/window.php`).
   ```sh
   php artisan vendor:publish --provider="JCombee\Native\WinPre\WinPreServiceProvider"
   ```

<!-- USAGE EXAMPLES -->
## Usage

### Open your first window

While following the [Installation](#installation) steps you have, by default, created a preset for the main window that looks like this: 

```php

// routes/window.php

Preset::preset('main', static function (Window $window) {
    $window->url('/')
        ->width(300)
        ->height(300);
});

```

To actually be able to open a window with this preset follow these steps:

1. Remove the `Window::open();` from `app/Providers/NativeAppServiceProvider.php`
2. Now fill the `boot()` function with: `\JCombee\Native\WinPre\Facades\WinPre::open('main')`
3. Run `php artisan native:serve`

Now you will see that the first window will be opened based on the settings you have set in the preset.

### Pass through parameters

[(under construction)][#roadmap]

Sometimes you might want to add some dynamic configuration to your window, for instance the url.
To do this we can add parameters to our preset.

To do this we first add a new preset in `routes/window.php`:

```php

// routes/window.php

Preset::preset('dish:{dish}', static function (Window $window, $dish) {
    $window->url('/dish/' . $dish);
});

```

To open this preset we call:

```php
\JCombee\Native\WinPre\Facades\WinPre::open('dish:{dish}', 'goulash');
```

By calling this it will take the parameter called dish and replace this in the id for the window.

<!-- ROADMAP -->
## Roadmap

- [x] Initial project setup
- [ ] Add Additional Examples / Documentation
- [x] Creating simple presets
- [ ] Pass through parameters
   - [x] Making the parameter available in the preset
   - [ ] Replacing the parameter in the id

<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<!-- LICENSE -->
## License

Distributed under the MIT License. See [LICENSE](https://github.com/JCombee/nativephp-win-pre/blob/master/LICENSE.md) for more information.

<!-- CONTACT -->
## Contact

Jerke Combee - [@JCombee](https://x.com/JCombee) - jerke1988@gmail.com

Project Link: [https://github.com/JCombee/nativephp-win-pre](https://github.com/JCombee/nativephp-win-pre)
