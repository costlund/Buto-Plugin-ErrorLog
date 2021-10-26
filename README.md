# Buto-Plugin-ErrorLog
Use this plugin on the server where to take care of error requests.
It put data in db.errorlog_log.

## Settings

```
```

## Usage
Set page and mysql.

### Page
```
plugin_modules:
  error:
    plugin: 'error/log'
```

### Plugin mysql settings
```
plugin:
  error:
    log:
      settings:
        mysql: 'yml:/../buto_data/theme/_/_/mysql.yml'
```
