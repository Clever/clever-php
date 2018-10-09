# Clever\EventsApi

All URIs are relative to *https://api.clever.com/v2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEvent**](EventsApi.md#getEvent) | **GET** /events/{id} | 
[**getEvents**](EventsApi.md#getEvents) | **GET** /events | 


# **getEvent**
> \Clever\Model\EventResponse getEvent($id)



Returns the specific event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$id = "id_example"; // string | 

try {
    $result = $api_instance->getEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Clever\Model\EventResponse**](../Model/EventResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getEvents**
> \Clever\Model\EventsResponse getEvents($limit, $starting_after, $ending_before, $school, $record_type)



Returns a list of events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Clever\Api\DataApi();

// Configure OAuth2 access token for authorization: oauth
$api_instance->getConfig()->setAccessToken('YOUR_ACCESS_TOKEN');

$limit = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$ending_before = "ending_before_example"; // string | 
$school = "school_example"; // string | 
$record_type = array("record_type_example"); // string[] | 

try {
    $result = $api_instance->getEvents($limit, $starting_after, $ending_before, $school, $record_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **ending_before** | **string**|  | [optional]
 **school** | **string**|  | [optional]
 **record_type** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Clever\Model\EventsResponse**](../Model/EventsResponse.md)

### Authorization

[oauth](../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

