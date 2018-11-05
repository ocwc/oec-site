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

wp menu item add-custom primary_navigation 'oe resources' '#'
wp menu item add-custom primary_navigation 'members' '#'
wp menu item add-custom primary_navigation 'activities' '#'
wp menu item add-custom primary_navigation 'about' '#'
