<?php
	class _STRING
	{
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%        
        public $InputData;
        private static $Instance;
//------------------------------------------------------------------------------------------------------------------    
        private function __construct($Data)
        {
            $this->InputData = $Data;
            return $this->InputData;
        }
//------------------------------------------------------------------------------------------------------------------            
        public static function _Set($Data)
        {
            if (is_null(self::$Instance))
                self::$Instance = new self($Data);
            return self::$Instance;
        }        
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
		public function _Get()
		{
		    if($this->_Check() && $this->_IsSet())
		        return $this->InputData;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------		
		public function _Check()
		{
			if($this->IsString())
			    return TRUE;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public function _Empty()
		{
			if($this->_Check() && $this->_IsFull())
			    return '';
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------		
		public function _IsSet()
		{
			if(isset($this->InputData) && $this->_IsFull())
			    return TRUE;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public function _IsEmpty()
		{
			if($this->InputData == NULL || $this->InputData == '')
			    return TRUE;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public function _IsFull()
		{
			if(!$this->_IsEmpty())
			    return TRUE;
            return FALSE;
		}
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
        public function IsString()
        {
            if(is_string($this->InputData))
                return TRUE;
            return FALSE;
        }
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    	public function ToUpper()
    	{
        	if($this->_Check() && $this->_IsFull())
            	return strtoupper($this->InputData);
        	return NULL;
    	}
//------------------------------------------------------------------------------------------------------------------
    	public function ToLower()
    	{
        	if($this->_Check() && $this->_IsFull())
            	return strtolower($this->InputData);
        	return NULL;
    	}    	
//------------------------------------------------------------------------------------------------------------------
        public function CropLeft($Removable)
        {
            if($this->_Check())
                return ltrim($this->InputData , $Removable);
            return NULL;
        }   	
//------------------------------------------------------------------------------------------------------------------
        public function CropRight($Removable)
        {
            if($this->_Check())
                return rtrim($this->InputData , $Removable);
            return NULL;
        }            
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	}
//------------------------------------------------------------------------------------------------------------------