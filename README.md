## Install Carbon Helpers With Composer

   $ composer require kiprono/carbon-helpers


## About Carbon Helpers

This is collection of reusable PHP Carbon helper functions. Most
of my PHP applications make use of Carbon (An international PHP extension for DateTime. https://carbon.nesbot.com). Since I have become lazier writing this at the top of every view page where I intend to use Carbon:

    use Carbon\Carbon;

Then later on:

    <?= Carbon::parse($variableHoldingDateHere)->diffForHumans() ?>

I felt that my quality of life would slightly improve if I would only be just be writing:

    <?= diffForHumans($variableHoldingDateHere) ?>


whenever I intend to use Carbon. If you think that makes sense, you are welcome to try out this library

## Learning Carbon Helpers

If you have you used https://carbon.nesbot.com before, you may not need any guidance. 
I however, intend to write documentation for this package as soon as I find time.

## Sponsors

I'd definately appreciate sponsors to this library as it would enable me put more effort building it.

## Contributing

Thank you for considering contributing to the Carbon Helpers! The contribution guide will be found in the upcoming documentation.

## The Golden Rule

Be nice.

## Security Vulnerabilities

If you discover a security vulnerability within this library, please e-mail me via [kipchumba.kenneth@ymail.com](mailto:kipchumba.kenneth@ymail.com). I will strive to promptly address them.

## License

This Library is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
