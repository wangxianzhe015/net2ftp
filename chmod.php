<?php

if (chmod('temp',0777))
	chmod('temp',0777);
else
	echo "couldn't change";