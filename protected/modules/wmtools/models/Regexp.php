<?php
class  Regexp extends CFormModel
{
    public $template = '/^.$/i';
    public $text;
    public $result;

    public function rules()
    {
        return array(
            array('template, text','required'),

        );
    }

    public function attributeLabels()
    {
        return array(
            'template'  => 'Шаблон',
            'text'      => 'Текст',
            'result'    => 'Результат',
        );
    }







}

