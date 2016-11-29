This plugin relies on and extends the [Export](https://github.com/boboldehampsink/export) plugin for CraftCMS, so install that first. (If [PR 30](https://github.com/boboldehampsink/export/pull/30) to fix missing checkbox fields hasn't been merged yet I suggest you [make that small edit to the services/ExportService.php file](https://github.com/boboldehampsink/export/pull/30/files).)

# ExportWidget CraftCMS Plugin
CraftCMS plugin to add a quick 'export' widget to the dashboard. (And dirtily hides the link in the sidebar to hit the Export plugin's pages on the main dashboard page)

## Config

Put your Section ID and Entry Type ID of the entries you want to export in the config.php file (and you can change the widget's name there too if you want)

##Usage

Add the dashboard widget as usual. This is a shorter version of the export options second page with all the default craft stuff removed, it'll just list the entry type's fields and let you rename the handle for your CSV and choose whether or not these fields are even included.


![Screenshot of the widget](/exportwidgetscreenshot.png?raw=true "Screenshot of example widget")
