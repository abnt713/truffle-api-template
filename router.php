<?php

class ApiTemplateRouter implements TruffleRouter{
    
    public function set_routes($api){
        $api->append('/', 'SampleController');
    }

}
