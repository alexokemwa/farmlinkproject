import 'package:farmlink/my_web_view.dart';
import 'package:flutter/material.dart';
import 'package:webview_flutter/webview_flutter.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      theme: ThemeData(useMaterial3: true),
      home: webViewApp(),
    );
  }
}

class webViewApp extends StatefulWidget {
  const webViewApp({super.key});

  @override
  State<webViewApp> createState() => _webViewAppState();
}

class _webViewAppState extends State<webViewApp> {
  late final WebViewController controller;
  @override
  void initState() {
    super.initState();
    controller = WebViewController()
      ..loadRequest(
        Uri.parse('https://ruralfarmlink.online/'),
      );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Farmlink'),
        actions: [
          Row(
            children: [
              IconButton(
                icon: Icon(Icons.arrow_back_ios),
                onPressed: () async {
                  final messanger = ScaffoldMessenger.of(context);
                  if (await controller.canGoBack()) {
                    await controller.goBack();
                  } else {
                    messanger.showSnackBar(
                      SnackBar(content: Text('no back history found')),
                    );

                    return;
                  }
                },
              ),
              IconButton(
                icon: Icon(Icons.arrow_forward_ios),
                onPressed: () async {
                  final messanger = ScaffoldMessenger.of(context);
                  if (await controller.canGoForward()) {
                    await controller.goForward();
                  } else {
                    messanger.showSnackBar(
                      SnackBar(content: Text('no FORWARD history found')),
                    );

                    return;
                  }
                },
              ),
              IconButton(
                icon: Icon(Icons.replay),
                onPressed: () {
                  controller.reload();
                },
              )
            ],
          )
        ],
      ),
      body: MyWebView(
        controller: controller,
      ),
    );
  }
}
