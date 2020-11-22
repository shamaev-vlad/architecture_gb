<?php


namespace Service\TransactionScript;


abstract class TransactionScript
{
    abstract function getProductIds();                //Получаем Id товаров в корзине
    abstract function getProductsInfo();              //Получаем информацию о товаре в корзине
    abstract function getDiscount();                  //Получаем информацию об акциях на товар
    abstract function calculateProductsTotalPrice();  //Подсчитываем стоимость корзины
    abstract function getUser();                      //Получаем данные пользователя
    abstract function process();                      //отправляем пользователю сообщение об оформлении заказа



}
