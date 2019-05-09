<?php

namespace Orkhanahmadov\OSMP;

use SimpleXMLElement;

class OSMP
{
    /**
     * @var SimpleXMLElement
     */
    private $xml;

    public function __construct()
    {
        $this->xml = new SimpleXMLElement('<response></response>');
    }

    public function check($txnId, $result, ?string $comment = null)
    {
        $this->xml->addChild('osmp_txn_id', $txnId);
        $this->xml->addChild('result', $result);
        if ($comment) {
            $this->xml->addChild('comment', $comment);
        }

        return $this->xml;
    }

    public function response()
    {
        return $this->xml->asXML();
    }
}
