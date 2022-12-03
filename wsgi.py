#! /usr/bin/python3.9

import sys
import site

site.addsitedir('/var/www/rbm-python-client-v1/venv/lib/python3.9/site-packages')

sys.path.insert(0, '/var/www/rbm-python-client-v1/')

from main import app as application
