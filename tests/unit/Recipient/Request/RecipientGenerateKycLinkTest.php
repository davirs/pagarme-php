<?php

namespace PagarMe\SdkTests\Recipient;

use PagarMe\Sdk\Recipient\Request\RecipientGenerateKycLink;
use PagarMe\Sdk\RequestInterface;

class RecipientGenerateKycLinkTest extends \PHPUnit_Framework_TestCase
{
    const ID   = 're_x1y2z3';
    const PATH = 'recipients/re_x1y2z3/kyc_link';

    /**
     * @test
     */
    public function mustPathBeCorrect()
    {
        $recipientGenerateKycLink = new RecipientGenerateKycLink(self::ID);

        $this->assertEquals(self::PATH, $recipientGenerateKycLink->getPath());
    }

    /**
     * @test
     */
    public function mustMethodBeCorrect()
    {
        $recipientGenerateKycLink = new RecipientGenerateKycLink(self::ID);

        $this->assertEquals(RequestInterface::HTTP_POST, $recipientGenerateKycLink->getMethod());
    }

    /**
     * @test
     */
    public function mustPayloadBeCorrect()
    {
        $recipientGenerateKycLink = new RecipientGenerateKycLink(self::ID);

        $this->assertEquals(
            [],
            $recipientGenerateKycLink->getPayload()
        );
    }
}
