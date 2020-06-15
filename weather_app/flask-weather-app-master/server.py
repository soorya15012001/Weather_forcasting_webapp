from flask import Flask, render_template, request
import requests
import os
from weather_ui import get_ui_attributes
app = Flask(__name__)
@app.route('/')
def index():
    return render_template('index.html')
@app.route('/get-weather', methods=['GET'])
def get_weather():
    location = request.args.get('location')
    payload = {'apikey':'EsAcJFnZ4kcoRdQa9IjndWmk3bfNJ96X', 'q':location, 'language':'en-us'}
    response = requests.get('http://dataservice.accuweather.com/locations/v1/search',params=payload)
    response_list = response.json()
    if not response_list:
        pass
    location_key = response_list[0]['Key']
    weather_obj = get_current_weather(location_key)
    if not weather_obj:
        pass
    ui_attributes = get_ui_attributes(
        weather_obj['description'].lower(),
        weather_obj['is_day'],
        weather_obj['temp'],
    )
    return render_template(
        'results.html',
        color=ui_attributes['bg_color'],
        font=ui_attributes['font_color'],
        icon=ui_attributes['icon'],
        is_jacket=ui_attributes['is_jacket'],
        location=location,
        description=weather_obj['description'],
        temp=weather_obj['temp'],
        )
def get_current_weather(location):
    payload = {'apikey': 'EsAcJFnZ4kcoRdQa9IjndWmk3bfNJ96X'}
    response = requests.get('http://dataservice.accuweather.com/currentconditions/v1/%s' % location,params=payload)
    response_list = response.json()
    if not response_list:
        return {}
    description = response_list[0]['WeatherText']
    is_daytime = response_list[0]['IsDayTime']
    curr_temp = response_list[0]['Temperature']['Imperial']['Value']
    return {
        'is_day': is_daytime,
        'description': description,
        'temp': curr_temp,
    }
if __name__ == '__main__':
    app.run(debug=True, host='127.0.0.1', port=5000)
