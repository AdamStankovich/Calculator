# Triangle area function in Python
# Make sure your "entry point" is set to the function name "subtract"

import math

def TriArea(request):
    request_json = request.get_json()
    x = int(request_json.get("x"))
    y = int(request_json.get("y"))
    if math.isnan(x) or math.isnan(y):
        return '', 400
    else:
        result = (x * y) / 2
        return str(result), 200