<?php
namespace klimovakaterina\phoneformatter;

class PhoneFormatter {
	
	public $resultStr = '';

    /**
     * @param $number
     * @param $format
     * @return mixed
     */
    public function changeFormat($number, $format)
    {
        $number = preg_replace('/[^0-9]+/', '', $number);
		

		if(strlen($number) != substr_count($format, 'X'))
			return 'Количество цифр не соответствует количеству символов в маске';
        else {
            $formatAr = str_split($format);
            foreach ($formatAr as $formattItem) {
                if ($formattItem == 'X') {
                    $this->resultStr .= substr($number, 0, 1);
                    $number = substr_replace($number, '', 0, 1);
                } else
                    $this->resultStr .= $formattItem;
            }
            return $this->resultStr;
        }
    }
    
}
