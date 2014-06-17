GlassCount
=========

GlassCount is an app for Google Glass that allows you to count how many Glass Explorers you see at Google IO.  
Then you can go to the GlassCount website and see average/total Explorer counts from other people.

Website: http://tomthecarrot.com/glasscount

Tutorial:  
1. Plug Glass into your computer via USB.  
2. Open a terminal console or command line and type: ```adb install GlassCount.apk```  
3. Say "ok glass, count another" to count another appearance.  
4. See other people's real-time results on the website (linked above).

To uninstall:  
Open a terminal console or command line and type: ```adb uninstall com.carrotcorp.glasscount```

When working with the website source code, make sure you rename ```htaccess``` to ```.htaccess``` after it is uploaded to your web server.

Licensed under the CarrotCorp Open Source License v1.0. See LICENSE file for more information.