<?php
/**
 * InsertLeadResponse.
 *
 * @package   ILoveLeasing
 * @author    Allen Torres <allen.torres@forrent.com>
 * @copyright FRMS 2016
 */
namespace ILoveLeasing;

/**
 * InsertLeads service class.
 */
class InsertLeads extends \SoapClient
{
    /**
     * WSDL.
     * 
     * @var string
     */
    const WSDL_FILE = "https://www.iloveleasing.com/console/int/mits4/insertlead.asmx?WSDL";

    /**
     * Class Map.
     * 
     * @var array
     */
    private $classmap = array(
        'InsertLead' => '\ILoveLeasing\InsertLeadRequest',
        'InsertLeadResponse' => '\ILoveLeasing\InsertLeadResponse'
    );

    /**
     * Construct.
     * 
     * @param string $wsdl    WSDL.
     * @param array  $options Soap Options.
     */
    public function __construct($wsdl = null, array $options = array())
    {
        // SOAP 1.2 client
        $soap12Opts = array (
            'soap_version' => SOAP_1_2,
            //'trace' => 1,
            'stream_context' => stream_context_create(array(
                'ssl' => array(
                    'ciphers'=>'RC4-SHA'
                )
            ))
        );
        $options = array_merge($soap12Opts, $options);
        
        foreach ($this->classmap as $key => $value) {
            if (! isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        if (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        
        parent::__construct($wsdl ?  : self::WSDL_FILE, $options);
    }

    /**
     * InsertLead Method.
     * 
     * @param \ILoveLeasing\InsertLead $parameters InsertLead Parameters.
     *           
     * @return \ILoveLeasing\InsertLeadResponse 
     */
    public function InsertLead(\ILoveLeasing\InsertLeadRequest $parameters)
    {
        return $this->__soapCall('InsertLead', array(
            $parameters
        ), array(
            'uri' => 'https://www.iloveleasing.com/',
            'soapaction' => ''
        ));
    }
}
