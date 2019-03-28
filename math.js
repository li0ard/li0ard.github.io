/*JS-фреймворк math.
Перед вами новый JS-фреймворк math:
Его особенности:
	•Отделение функций фреймворка знаком $
	•Вместо большого кода одна функция
	•Можно дополнять свои функции
	•Низкий риск получения ошибки
	•Просто использовать
https://vk.com/3peekawowd
©2019 Nick*/
//Умножение
const $umn = function(x, y) {
	const umn = x * y;
	return umn;
}
//Сложение
const $sl = function(x, y) {
	const sl = x + y;
	return sl;
}
//Вычитание
const $vch = function(x, y) {
	const vch = x - y;
	return vch;
}
//Деление
const $del = function(x, y) {
	const del = x / y;
	return del;
}
//Возвращение остатка
const $mod = function(x, y) {
	const mod = x % y;
	return mod;
}
//Рандом
const $rand = function(x, y) {
	const rand = Math.randon(x, y);
	return rand;
}
//Инкримент
const $ink = function(x) {
	const ink = x = x + 1;
	return ink;
}
//Декримент
const $dek = function(x) {
	const dek = x = x - 1;
	return dek;
}
//Факториал
const $fct = function(n) {
    const fct = 1;
    while(n) {
        fct *= n--
    }
    return fct;
}
//Квадратный Корень
const $sqrt = function(x) {
    const sqrt = Math.sqrt(x);
    return sqrt;
}
/*Абсолютное Значение
const $abs = function(x) {
    const abs = Math.abs(x);
    return abs;
}*/
