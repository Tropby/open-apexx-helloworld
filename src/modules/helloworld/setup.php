<?php 

/*
	Open Apexx Hello World
	Copyright (C) 2020 Carsten Grings

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU Lesser General Public License as published by
	the Free Software Foundation, either version 2.1 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU Lesser General Public License for more details.

	You should have received a copy of the GNU Lesser General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


//Security-Check
if ( !defined('APXRUN') ) die('You are not allowed to execute this file directly!');


//Installieren
if ( SETUPMODE=='install' ) 
{
	$mysql="";
	$queries=split_sql($mysql);
	foreach ( $queries AS $query ) $db->query($query);
}

//Deinstallieren
elseif ( SETUPMODE=='uninstall' )
{
	$mysql="";
	$queries=split_sql($mysql);
	foreach ( $queries AS $query ) $db->query($query);
}

//Update
elseif ( SETUPMODE=='update' )
{
	switch ( $installed_version )
	{
		
		case 100: //zu 1.0.1
		
		
	}
}
