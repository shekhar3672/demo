<?php



/**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    function sendResponse($result, $message)
    {
    	$response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];


        return $response;
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
     function sendError($error, $errorMessages = [], $code = 404)
    {
    	$response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }