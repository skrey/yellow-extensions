---
Title: Sicherheitseinstellungen
---
Wie man Sicherheit und Datenschutz konfiguriert.

## Datenverschlüsselung

Überprüfe ob deine Webseite [Datenverschlüsselung](https://www.ssllabs.com/ssltest/) unterstützt. Falls Probleme auftreten, kontaktiere bitte deinen Webhoster. Am Besten ist es wenn deine Webseite automatisch von HTTP nach HTTPS weiterleitet und die Internetverbindung immer verschlüsselt ist.

## Sicherheitsmodus

Falls du deine Webseite vor Unfug im Webbrowser schützen willst, beschränke [Markdown](markdown-cheat-sheet). Öffne die Datei `system/settings/system.ini` und ändere `CoreSafeMode: 1`. Benutzer dürfen dann Markdown benutzen, aber kein HTML, JavaScript und andere Funktionen verwenden.

## Loginbeschränkung

Falls du nicht willst dass Benutzer im Webbrowser erstellt werden, beschränke die [Login-Seite](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit). Öffne die Datei `system/settings/system.ini` und ändere `EditLoginRestriction: 1`. Benutzer dürfen sich dann einloggen, aber keine neue Benutzerkonten erstellen.

## Benutzerbeschränkung

Falls du nicht willst dass Seiten im Webbrowser verändert werden, beschränke [Benutzerkonten](adjusting-system#benutzerkonten). Öffne die Datei `system/settings/user.ini` und ändere am Zeilenende die Startseite. Benutzer dürfen dann Seiten innerhalb ihrer Startseite bearbeiten, aber nirgendwo sonst.

[Weiter: Servereinstellungen →](server-configuration)