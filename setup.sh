#!/usr/bin/env bash

wp theme activate oec-site/resources

wp menu delete top_navigation
wp menu delete primary_navigation

MENU=`wp menu create top_navigation --porcelain`
wp menu location assign top_navigation top_navigation
wp menu item add-custom top_navigation 'news' '/news'
wp menu item add-custom top_navigation 'media' '/media'
wp menu item add-custom top_navigation 'ed insights' '/ed-insights'
wp menu item add-custom top_navigation 'projects' '/projects'

MENU=`wp menu create primary_navigation --porcelain`
wp menu location assign primary_navigation primary_navigation

SUBMENU=`wp menu item add-custom primary_navigation 'OE Resources' '#' --porcelain`
wp menu item add-custom primary_navigation 'Guides' '#' --parent-id=${SUBMENU}
wp menu item add-custom primary_navigation 'Search Engines' '#' --parent-id=${SUBMENU}
wp menu item add-custom primary_navigation 'Case Studies' '#' --parent-id=${SUBMENU}

SUBMENU=`wp menu item add-custom primary_navigation 'Members' '#'  --porcelain`
wp menu item add-custom primary_navigation 'Guides' '#' --parent-id=${SUBMENU}
wp menu item add-custom primary_navigation 'Search Engines' '#' --parent-id=${SUBMENU}
wp menu item add-custom primary_navigation 'Case Studies' '#' --parent-id=${SUBMENU}

SUBMENU=`wp menu item add-custom primary_navigation 'Activities' '#'  --porcelain`
wp menu item add-custom primary_navigation 'Guides' '#' --parent-id=${SUBMENU}
wp menu item add-custom primary_navigation 'Search Engines' '#' --parent-id=${SUBMENU}
wp menu item add-custom primary_navigation 'Case Studies' '#' --parent-id=${SUBMENU}

SUBMENU=`wp menu item add-custom primary_navigation 'About' '#'  --porcelain`
wp menu item add-custom primary_navigation 'Guides' '#' --parent-id=${SUBMENU}
wp menu item add-custom primary_navigation 'Search Engines' '#' --parent-id=${SUBMENU}
wp menu item add-custom primary_navigation 'Case Studies' '#' --parent-id=${SUBMENU}
