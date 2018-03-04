public function getdata(){
        $input = NULL; 
        $query = array();
        $sql = NULL;
        $data = array();
        $i = 0;

        $input = $_GET["name_startsWith"]; // <-- obtains the search parameter
        $input = Sanitize::clean($input); // <-- prepares the search parameter

        $sql = "select * from atable where condition like '".$input."%';";

        $query = $this->query($sql); // <-- the model execute the search

        if ($query){
            $c = count($query);
            for($i=0;$i<$c;$i++){ // <-- iterate over the returned data
                $json['id'] = $query[$i][0]['id'];
                $json['column1'] = $query[$i][0]['column1'];
                $json['column2'] = $query[$i][0]['column2'];
                $data[] = $json; // <-- the data it's stored on an multiarray, to be converted to JSON
            }
        }
        $jquerycallback = $_GET["callback"];
        echo JsBaseEngineHelper::object($data,array('prefix' => $jquerycallback.'({"totalResultsCount":'.count($query).',"search":','postfix' => '});')); //<-- the data it´s returned as JSON
    }