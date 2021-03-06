.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt
.. index:: Configuration

Configuration
-------------

When the extension is installed you can start configuring the backend.

Configure Backend user
^^^^^^^^^^^^^^^^^^^^^^

You need a backend user that have access to the following elements:

+-------------------------------------------------------------------------------------------------------+
| Modules                                                                                               |
+=======================================================================================================+
| * Backend Management **(always)**                                                                     |
| * Backend Management>User Admin *(optional)*                                                          |
| * Backend Management>User Access *(optional)*                                                         |
| * Backend Management>File Mounts *(optional)*                                                         |
+-------------------------------------------------------------------------------------------------------+

+-------------------------------------------------------------------------------------------------------+
| Tables (modify)                                                                                       |
+=======================================================================================================+
| * Backend usergroup                                                                                   |
| * Backend user                                                                                        |
| * Filemount                                                                                           |
+-------------------------------------------------------------------------------------------------------+

+-------------------------------------------------------------------------------------------------------+
| Allowed excludefields                                                                                 |
+=======================+===============================================================================+
| **Backend User**      | * db_mountpoints                                                              |
|                       | * disable                                                                     |
|                       | * email                                                                       |
|                       | * file_mountpoints                                                            |
|                       | * usergroup                                                                   |
|                       | * realName                                                                    |
|                       | * password                                                                    |
|                       | * username                                                                    |
+-----------------------+-------------------------------------------------------------------------------+
| **Backend Usergroup** | * disable                                                                     |
|                       | * grouptitle                                                                  |
|                       | * description                                                                 |
+-----------------------+-------------------------------------------------------------------------------+
| **Filemount**         | (all)                                                                         |
|                       |                                                                               |
|                       | * disable                                                                     |
|                       | * path                                                                        |
|                       | * title                                                                       |
|                       | * read_only                                                                   |
|                       | * base                                                                        |
+-----------------------+-------------------------------------------------------------------------------+
