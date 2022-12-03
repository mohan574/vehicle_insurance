import base64
from Crypto.Cipher import AES
from urllib import parse

AES_SECRET_KEY = 'RCS#io&((#$@%@&('
IV = "KihAvm(!0)3#(%*%"

#Padding algorithm
BS = len(AES_SECRET_KEY)
pad = lambda s: s + (BS - len(s) % BS) * chr(BS - len(s) % BS)
unpad = lambda s: s[0:-ord(s[-1:])]


class AES_ENCRYPT(object):
    def __init__(self):
        self.key = AES_SECRET_KEY
        self.mode = AES.MODE_CBC

    #Encryption function
    def encrypt(self, text):
        cryptor = AES.new(self.key.encode("utf8"), self.mode, IV.encode("utf8"))
        self.ciphertext = cryptor.encrypt(bytes(pad(text), encoding="utf8"))
        #The strings obtained during AES encryption are not necessarily ASCII character sets. There may be problems when they are output to the terminal or saved. Base64 encoding is used
        return base64.b64encode(self.ciphertext)

    #Decryption function
    def decrypt(self, text):
        decode = base64.b64decode(text)
        cryptor = AES.new(self.key.encode("utf8"), self.mode, IV.encode("utf8"))
        plain_text = cryptor.decrypt(decode)
        return unpad(plain_text)
