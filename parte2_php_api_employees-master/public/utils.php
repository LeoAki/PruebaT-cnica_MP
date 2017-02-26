<?php

require('../XML_Serializer/XML/Serializer.php');

function json_to_xml($json)
{
    $serializer_options = array(
        'addDecl' => FALSE,
        'encoding' => 'ISO-8859-1',
        'indent' => '  ',
        'rootName' => 'root',
    );
    $serializer = new XML_Serializer($serializer_options);

    if ($serializer->serialize($json)) {
        return $serializer->getSerializedData();
    } else {
        return null;
    }
}