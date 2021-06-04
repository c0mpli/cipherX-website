import 'package:flutter/material.dart';
import 'package:adobe_xd/pinned.dart';

class XDLoadingScreen extends StatelessWidget {
  XDLoadingScreen({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: const Color(0xff12161c),
      body: Stack(
        children: <Widget>[
          Pinned.fromPins(
            Pin(start: 33.0, end: 32.0),
            Pin(size: 44.0, middle: 0.4957),
            child: Text(
              'Dummy Stocks',
              style: TextStyle(
                fontFamily: 'Arial',
                fontSize: 40,
                color: const Color(0xff72fff1),
                fontWeight: FontWeight.w700,
              ),
              textAlign: TextAlign.center,
            ),
          ),
          Pinned.fromPins(
            Pin(size: 210.0, middle: 0.5027),
            Pin(size: 32.0, end: 26.0),
            child: Text(
              'Join India\'s first dummy market\n',
              style: TextStyle(
                fontFamily: 'Arial',
                fontSize: 14,
                color: const Color(0xffa1a0a0),
                fontWeight: FontWeight.w700,
              ),
              textAlign: TextAlign.center,
            ),
          ),
        ],
      ),
    );
  }
}
