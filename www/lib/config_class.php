<?php

abstract class Config {

	const SITENAME = "Obnova.ru";
	const SECRET = "VaHaHa_";
	const ADDRESS = "http://obnova.ru";
	const ADM_NAME = "Виталий Ивановский";
	const ADM_EMAIL = "admin@obnova.ru";
	
	const API_KEY = "DKEL39DL";
	
	const DB_HOST = "localhost";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_NAME = "obnova";
	const DB_PREFIX = "myadd_";
	const DB_SYM_QUERY = "?";
	
	const DIR_IMG = "/images/";
	const DIR_IMG_ARTICLES = "/images/articles/";
	const DIR_AVATAR = "/images/avatars/";
	const DIR_TMPL = "/home/obnova.ru/www/tmpl/";
	const DIR_EMAILS = "/home/mysite.local/www/tmpl/emails/";
	
	const LAYOUT = "main";
	const FILE_MESSAGES = "/home/obnova.ru/www/text/messages.ini";
	
	const FORMAT_DATE = "%d.%m.%Y %H:%M:%S";
	
	const COUNT_ARTICLES_ON_PAGE = 3;
	const COUNT_ADDS_ON_PAGE = 10;
	const COUNT_SHOW_PAGES = 10;
	
	const MIN_SEARCH_LEN = 3;
	const LEN_SEARCH_RES = 255;
	
	const SEF_SUFFIX = ".html";
	
	const DEFAULT_AVATAR = "default.png";
	const MAX_SIZE_AVATAR = 51200;
}

?>