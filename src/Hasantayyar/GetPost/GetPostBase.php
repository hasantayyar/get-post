<?php
namespace Hasantayyar\GetPost;

class GetPostBase {
	protected $timeout = 5;
        protected $connecttimeout = 10;
	/**
        * @param integer $timeout - in second
        * @return self 
        */
        public function setTimeout($timeout){
                $this->timeout = $timeout;
                return $this;
        }

        /**
        * @param integer $connecttimeout - in second
        * @return self 
        */
        public function setConnectTimeout($connecttimeout){
                $this->connecttimeout = $connecttimeout;
                return $this;
        }


}
