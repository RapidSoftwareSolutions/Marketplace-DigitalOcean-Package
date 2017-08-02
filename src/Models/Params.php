<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 24.07.17
 * Time: 12:04
 */

namespace Models;

class Params
{
    public static function createParams($requiredParams, $optionalParams, $requestParams)
    {
        $data = [];

        foreach ($requiredParams as $rapidName=>$vendorName)
        {
            $data[$vendorName] =  $requestParams[$rapidName];
        }

        foreach ($requestParams as $key=>$value)
        {
            if(array_key_exists($key, $optionalParams) && !empty($value))
            {
                $data[$optionalParams[$key]] = $value;
            }
        }

        return $data;
    }


    public static function createRequestBody($data, $bodyParams)
    {
        $requestBody = [];
        foreach ($data as $key=>$value)
        {
            if(in_array($key, $bodyParams))
            {
                $requestBody[$key] = $value;
            }
        }
        return $requestBody;
    }

    public static function checkDependencies($requestParams, $paramsDependence){
        $result = [];
        $missingField = [];
        foreach ($paramsDependence as $param=>$value){
            $paramVal = $requestParams[$param];
            if(isset($paramsDependence[$param][$paramVal])){
                $dependencies = explode(",",$paramsDependence[$param][$paramVal]);
                foreach ($dependencies as $item){
                    if(!isset($requestParams[$item])){
                        $missingField[] = $item;
                    }
                }
            } else {
                $result['callback'] = 'error';
                $result['contextWrites']['to']['status_code'] = "REQUIRED_FIELDS";
                $result['contextWrites']['to']['status_msg'] = "Invalid field value.";
                $result['contextWrites']['to']['fields'] = $param;
            }
        }

        if(!empty($missingField)){
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = "REQUIRED_FIELDS";
            $result['contextWrites']['to']['status_msg'] = "Please, check and fill in required fields.";
            $result['contextWrites']['to']['fields'] = implode(",",$missingField);
        } else {
            $result['callback'] = 'success';
        }

        return $result;
    }
}