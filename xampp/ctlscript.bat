@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist E:\school\xampp\hypersonic\scripts\ctl.bat (start /MIN /B E:\school\xampp\server\hsql-sample-database\scripts\ctl.bat START)
if exist E:\school\xampp\ingres\scripts\ctl.bat (start /MIN /B E:\school\xampp\ingres\scripts\ctl.bat START)
if exist E:\school\xampp\mysql\scripts\ctl.bat (start /MIN /B E:\school\xampp\mysql\scripts\ctl.bat START)
if exist E:\school\xampp\postgresql\scripts\ctl.bat (start /MIN /B E:\school\xampp\postgresql\scripts\ctl.bat START)
if exist E:\school\xampp\apache\scripts\ctl.bat (start /MIN /B E:\school\xampp\apache\scripts\ctl.bat START)
if exist E:\school\xampp\openoffice\scripts\ctl.bat (start /MIN /B E:\school\xampp\openoffice\scripts\ctl.bat START)
if exist E:\school\xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B E:\school\xampp\apache-tomcat\scripts\ctl.bat START)
if exist E:\school\xampp\resin\scripts\ctl.bat (start /MIN /B E:\school\xampp\resin\scripts\ctl.bat START)
if exist E:\school\xampp\jboss\scripts\ctl.bat (start /MIN /B E:\school\xampp\jboss\scripts\ctl.bat START)
if exist E:\school\xampp\jetty\scripts\ctl.bat (start /MIN /B E:\school\xampp\jetty\scripts\ctl.bat START)
if exist E:\school\xampp\subversion\scripts\ctl.bat (start /MIN /B E:\school\xampp\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist E:\school\xampp\lucene\scripts\ctl.bat (start /MIN /B E:\school\xampp\lucene\scripts\ctl.bat START)
if exist E:\school\xampp\third_application\scripts\ctl.bat (start /MIN /B E:\school\xampp\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist E:\school\xampp\third_application\scripts\ctl.bat (start /MIN /B E:\school\xampp\third_application\scripts\ctl.bat STOP)
if exist E:\school\xampp\lucene\scripts\ctl.bat (start /MIN /B E:\school\xampp\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist E:\school\xampp\subversion\scripts\ctl.bat (start /MIN /B E:\school\xampp\subversion\scripts\ctl.bat STOP)
if exist E:\school\xampp\jetty\scripts\ctl.bat (start /MIN /B E:\school\xampp\jetty\scripts\ctl.bat STOP)
if exist E:\school\xampp\hypersonic\scripts\ctl.bat (start /MIN /B E:\school\xampp\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist E:\school\xampp\jboss\scripts\ctl.bat (start /MIN /B E:\school\xampp\jboss\scripts\ctl.bat STOP)
if exist E:\school\xampp\resin\scripts\ctl.bat (start /MIN /B E:\school\xampp\resin\scripts\ctl.bat STOP)
if exist E:\school\xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT E:\school\xampp\apache-tomcat\scripts\ctl.bat STOP)
if exist E:\school\xampp\openoffice\scripts\ctl.bat (start /MIN /B E:\school\xampp\openoffice\scripts\ctl.bat STOP)
if exist E:\school\xampp\apache\scripts\ctl.bat (start /MIN /B E:\school\xampp\apache\scripts\ctl.bat STOP)
if exist E:\school\xampp\ingres\scripts\ctl.bat (start /MIN /B E:\school\xampp\ingres\scripts\ctl.bat STOP)
if exist E:\school\xampp\mysql\scripts\ctl.bat (start /MIN /B E:\school\xampp\mysql\scripts\ctl.bat STOP)
if exist E:\school\xampp\postgresql\scripts\ctl.bat (start /MIN /B E:\school\xampp\postgresql\scripts\ctl.bat STOP)

:end

