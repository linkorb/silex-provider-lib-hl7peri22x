<?php

namespace LinkORB\Hl7Peri22x\Provider;

use Hl7Peri22x\Document\DocumentFactory;
use Hl7Peri22x\Dossier\DossierFactory;
use Hl7Peri22x\Processor\ObservationProcessor;
use Hl7Peri22x\TextFilter\EscapeSequenceFilter;
use Hl7Peri22x\Transformer\IdentityTransformer;
use Mimey\MimeTypes;
use Peri22x\Attachment\AttachmentFactory;
use Peri22x\Resource\ResourceFactory;
use Peri22x\Section\SectionFactory;
use Peri22x\Value\ValueFactory;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class Hl7PeriServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        # the observation processor service
        $app['hl7peri.observation_processor.service'] = function ($app) {

            return new ObservationProcessor(
                new DossierFactory(
                    new AttachmentFactory,
                    new DocumentFactory(new MimeTypes)
                ),
                new ResourceFactory,
                new SectionFactory(new ValueFactory),
                new IdentityTransformer,
                new EscapeSequenceFilter
            );
        };
    }
}
