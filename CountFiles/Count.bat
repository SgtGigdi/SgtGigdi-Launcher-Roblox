for /r %%a in (*) do echo del %%a >> del_files.bat
Start del_files.bat
del del_files.bat
@exit
