<?php

function getSetting($setting = 'sitename')
{
	return App\Sitesetting::where('settingname', $setting)->get()[0]->value;
}

