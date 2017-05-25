# linkorb/silex-provider-lib-hl7peri22x

Provides `Hl7Peri22x\Processor\ObservationProcessor` from
[linkorb/lib-hl7-peri22x][] as a service named
`hl7peri.observation_processor.service`.

## Install

Install using composer:-

    $ composer require linkorb/silex-provider-lib-hl7peri22x

Then register the provider:-

    // app/app.php
    use LinkORB\Hl7Peri22x\Provider\Hl7PeriServiceProvider;
    ...
    $app->register(new Hl7PeriServiceProvider);



[linkorb/lib-hl7-peri22x]: <https://github.com/linkorb/lib-hl7-peri22x>
  "linkorb/lib-hl7-peri22x at GitHub"
