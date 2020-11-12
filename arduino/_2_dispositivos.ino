int ledPin = 13;
int numero = -5;

void setup()   {
  pinMode(ledPin, OUTPUT);
  Serial.begin(9600);
}

void loop()
{
  if (Serial.available() > 0) {
    numero = Serial.read();
  }

  if (numero > 0) {
    if (numero == '1') {
      digitalWrite(ledPin, HIGH);
      //delay(2000);
    }
    else if (numero == '0') {
      digitalWrite(ledPin, LOW);
      //delay(2000);
    }
  }
 // numero = 0;
}


