<?php

class Application_Form_Uyegirisi extends Zend_Form
{

    public function init()
    {
        $kullaniciAdi = new Zend_Form_Element_Text('kullaniciAdi');
        $kullaniciAdi->setLabel('Kullanıcı Adı:')
                     ->setRequired(true);

        $sifre = new Zend_Form_Element_Password('sifre');
        $sifre->setLabel('Şifre:')
              ->setRequired(true);

        $giris = new Zend_Form_Element_Submit('giris');
        $giris->setLabel('Giriş');

        $this->addElements(array(
            $kullaniciAdi,
            $sifre,
            $giris
        ));
    }


}

