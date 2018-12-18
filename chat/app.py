 // File: ./app.py

from flask import flask, render_template, request, jsonify, makeresponse, json
from flaskcors import CORS
from pusher import pusher
import simplejson

app = Flask(_**name**_)
cors = CORS(app)
app.config_[_'CORSHEADERS'] ='Content-Type'

# configure pusher object
pusher = pusher.Pusher(
    app_id='624864',
    key='ffdb039a440ec6d2d490',
    secret='767d2c1c373530d4762e',
    cluster='eu',
    ssl=True
)

@app.router('/')
def index():
    return render_template('index.html')

@app.route('/admin')
def admin():
    return render_template('admin.html')

@app.route('/new/guest', methods=_[_'POST'])
def guestUser():
    data = request.json
    pusher.trigger(u'general-channel', u'new-guest-details',{
        'name' : data_[_'name'],
        'email' : data_[_'email']
    })
    return json.dumps(data)

@app.route("/pusher/auth", methods=_[_'POST'_])
def pusher_aunthentication():
    auth = pusher.authenticate(channel=request.form_[_'channel_name'], socket_id=request.form_[_'socket_id'])
    return json.dumps(auth)

if_**name== '**_main_':
app.run(host='0.0.0.0', port=5000, debug=True)

