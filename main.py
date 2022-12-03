import smtplib
import ssl
from email.mime.multipart import MIMEMultipart
import random
from email.mime.text import MIMEText
from flask import Flask, render_template, request, session
import pymysql
import encrypt_decrypt
import datetime
import uuid
import string
import json
import collections
app = Flask(__name__)
app.secret_key = "INS&((#$@%@&(L!Ch8329%^&"


@app.route('/login', methods=['POST'])
def login():
    Email_id = request.form.get('username')
    password = request.form.get('password')

    mydb = pymysql.connect(
        host="localhost",
        user="sagar",
        password="S@gar135",
        database="INSURANCE"
    )
    print(Email_id+"password :: "+password)
    cursor = mydb.cursor()
    cursor.execute('select password,status,username,Mobile_number,Email from  TBL_USERS WHERE Email = %s',
                   (Email_id))

    account = cursor.fetchone()
    aes_encrypt = encrypt_decrypt.AES_ENCRYPT()
    password_encrypt = account[0]
    e = aes_encrypt.decrypt(password_encrypt)
    d = e.decode("utf-8")
    if (account[1] == "Active" and  d == password):
        json_obj = {
            "status": "200",
            "username": account[2],
            "email": Email_id,
            "Message": "sucess"
        }
        print("login Sucessfull : " + Email_id)
        return json_obj
    else:
        fail_resp = {
            "status": "404",
            "Message": "fail"
        }
        print("login Failed : " + Email_id)
        return fail_resp

    # return render_template('campaign.php')
        mydb.commit()
        mydb.close()

@app.route("/change_password", methods=['POST'])
def change_password():
    email_id = request.form.get('username')
    current_password = request.form.get('current_password')
    new_password = request.form.get('new_password')
    mydb = pymysql.connect(
        host="localhost",
        user="sagar",
        password="S@gar135",
        database="INSURANCE"
    )
    cursor = mydb.cursor()
    cursor.execute(
        'SELECT password FROM TBL_USERS WHERE Email = %s', (email_id))
    account = cursor.fetchone()
    print(account)
    
    aes_encrypt = encrypt_decrypt.AES_ENCRYPT()
    e = aes_encrypt.decrypt(account[0])
    password = e.decode("utf-8")
    aes_encrypt = encrypt_decrypt.AES_ENCRYPT()
    f = aes_encrypt.encrypt(new_password)
    password_encrypt = f.decode("utf-8")
    print(password_encrypt)
    
    if account is None:
        print("Account is not available")
    else:
        if (password == current_password ):
            cursor = mydb.cursor()
            cursor.execute(
            'update TBL_USERS set password= %s where Email= %s', (password_encrypt, email_id))
            mydb.commit()
    
            json_obj = {
            "status": "200",
            "Message": "Password Changed Successfully"
            }
            return json_obj
        else:
            fail_resp = {
            "status": "404",
            "Message": "Current Password Doesn't match , please try again"
            }
            return fail_resp
    mydb.close()

@app.route('/ForgetPassword', methods=['POST'])
def ForgetPassword():
    email_id = request.form['email_id']

    mydb = pymysql.connect(
        host="localhost",
        user="sagar",
        password="S@gar135",
        database="INSURANCE"
    )

    cursor = mydb.cursor()
    if email_id is not None:

        cursor = mydb.cursor()
        cursor.execute(
            'select username,password from TBL_USER_MASTER where email_id= %s', (email_id))
        account = cursor.fetchone()
        print(account)
        aes_encrypt = encrypt_decrypt.AES_ENCRYPT()
        e = aes_encrypt.decrypt(account[1])
        password = e.decode("utf-8")

        s = smtplib.SMTP('smtp.gmail.com', 587)
        context = ssl.create_default_context()
        s.starttls(context=context)
      #  s.starttls()

        s.login("noreply@rbm.studio", "b4VZGdRTH")

        message = """\
Subject: rbm.studio<no-reply>
        

Hello """+str(account[0])+""",


        """+"""Here is Your Login details.
        username : """+str(email_id)+"""
        Password : """+str(password)+"""

        Please Don't share your Details."""+"""




Thanks and Regards,

INSURANCE.PVT.Ltd.
        """
        s.sendmail("help.rbmstudio@gmail.com", email_id, message)

        print("Mail sent")

        s.quit()

        resp = {
            "status": "200",
            "user": str(account[2])
        }

        return resp

    else:

        return "Invalid Email"

@app.route('/user_registration', methods=['POST'])
def user_registration():
    username = request.form.get('username')
    firstname = request.form.get('firstname')
    lastname = request.form.get('lastname')
    password = request.form.get('password')
    mobile_number = request.form.get('mobile_number')
    email_id = request.form.get('email_id')
    userid = str(random.randint(1,100000))

    aes_encrypt = encrypt_decrypt.AES_ENCRYPT()
    e = aes_encrypt.encrypt(password)
    token = str(uuid.uuid1())
    print("token :: "+token)
    mydb = pymysql.connect(
        host="localhost",
        user="sagar",
        password="S@gar135",
        database="INSURANCE"
    )

    cursor = mydb.cursor()
    result = cursor.execute('INSERT INTO TBL_USERS (First_name,Last_name,Email,Mobile_number,cdt,Status,password,userid,username,token) values(%s,%s,%s,%s,now(),"Active",%s,%s,%s,%s)',
                          (firstname,lastname,email_id,mobile_number,e,userid, username,token))
    print(result)
    mydb.commit()

    if (result == 1):
        msg = MIMEMultipart("alternative")
        msg["Subject"] = "User Invitation"
        msg["From"] = "noreply@rbm.studio"
        msg["To"] = "sagarravuri2@gmail.com"

        s = smtplib.SMTP('smtp.gmail.com', 587)
        context = ssl.create_default_context()
        s.starttls(context=context)
        s.login("noreply@rbm.studio", "b4VZGdRTH")

        html = """\
<style>
.rbmbnt {
    background: rgb(118 59 117);
    color: #fff;
    font-weight: bold;
    padding: 6px 33px;
    border: none;
    border-radius: 2px;
}


.rbmbnt {
    margin: 12px !important;
    width: 135px;
    float: right;
}


p {
    font-size: 20px;
    }
.main-panel {
    margin: 0px !important;
    width: 100% !important;
}

.content-wrapper {
    margin-top: 0px;
    width: 100%;
}

</style>
<div class="main-panel" style="padding-top: 30px !important;">
  <div class="content-wrapper" style="margin-top:-30px">
    <div class="page-header" style="margin-bottom: 0px;">
  <center>    <h3 class="page-title" style="color:#763b75;    margin: 10px 0;"> User Invitation </h3></center>
    </div>
	<form action="#" method="POST" enctype="multipart/form-data">

    <div class="row">
        <div class="col-md-8 ">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"></h4>
              <form class="forms-sample">
                <div class="form-group">
		  <div class="row rowcust">
                    <p>
Hello <b>"""+username+"""</b>,</p>
<br>

<p>
&emsp; &emsp; We’ve given you access to our portal so that you can manage your journey with us and get to know all the possibilities offered by  our product and service.
</p>

 please click on the following link to Accept your Invitation :  &ensp;      http://localhost/INSURANCE/user_acception.php?token="""+token+"""
</p>
<br>
<br>
<br>
<p>
Thanks & Regards,
</p>
<p>
RBM.STUDIO
</p>
                </div>
                <br>
              </form>
            </div>
          </div>
	</div>

"""

        part = MIMEText(html, "html")
        msg.attach(part)
        s.sendmail("help.rbmstudio@gmail.com", email_id, msg.as_string())
        print("Mail sent")

        s.quit()

        resp = {
            "status": "200",
            "email": email_id
        }
        return resp
    else:
        resp = {
            "status": "400",
            "email": email_id
        }
        return resp

@app.route('/insurance', methods=['POST'])
def insurance():
    brand = request.form.get('brand')
    model = request.form.get('model')
    print("brand :: "+brand)
    print("model :: "+model)
    mydb = pymysql.connect(
        host="localhost",
        user="sagar",
        password="S@gar135",
        database="INSURANCE"
    )
    cursor = mydb.cursor()
    cursor.execute(
        'select Price,year_of_manufacture from TBL_CAR_DETAILS where brand=%s and model=%s',(brand,model))
    y = cursor.fetchone()
    print(y)
    if y is not None:
        car_price = y[0]

        price_premium = (20*float(car_price))/100

        month_premium = price_premium/12

        tax = (12*float(price_premium))/100

        resp={

            "status":"200",
            "car_price":car_price,
            "Yearly_premium" : round(price_premium,2),
            "monthly_premium" : round(month_premium,2),
            "tax":tax,
            "message":"success"
        }
        return resp
    else:
        resp={
            "status": "400"
        }
        return resp

if __name__ == '__main__':
    app.run(threaded=True)
