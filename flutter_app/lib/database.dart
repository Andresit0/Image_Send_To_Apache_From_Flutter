import 'package:http/http.dart' as http;

Future<bool> sendImage(
    String filename, String strBase64, Function refresh) async {
  var url = Uri.https('facturaciontecnologica.com', '/img/writeClassImg.php');
  await http.post(url, body: {
    'name': filename,
    'image': strBase64,
  }).then((result) {
    // ignore: avoid_print
    print(result.body.toString());
    refresh();
  }).catchError((error) {
    // ignore: avoid_print
    print('db.sendImage() Error: ' + error.toString());
    // ignore: invalid_return_type_for_catch_error
    return false;
  });
  return true;
}
