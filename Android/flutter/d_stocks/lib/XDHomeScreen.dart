import 'package:flutter/material.dart';
import 'package:adobe_xd/pinned.dart';
import './XDBg_1.dart';

class XDHomeScreen extends StatelessWidget {
  XDHomeScreen({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: const Color(0xff12161c),
      body: Stack(
        children: <Widget>[
          Pinned.fromPins(
            Pin(start: 0.0, end: 0.0),
            Pin(size: 88.0, end: 0.0),
            child:
                // Adobe XD layer: 'Taskbar' (group)
                Stack(
              children: <Widget>[
                Pinned.fromPins(
                  Pin(start: 0.0, end: 0.0),
                  Pin(start: 0.0, end: 0.0),
                  child:
                      // Adobe XD layer: 'Bg_1' (component)
                      XDBg_1(),
                ),
                Pinned.fromPins(
                  Pin(start: 28.0, end: 28.0),
                  Pin(size: 16.0, end: 8.0),
                  child:
                      // Adobe XD layer: 'Text' (group)
                      Stack(
                    children: <Widget>[
                      Pinned.fromPins(
                        Pin(size: 38.0, start: 0.0),
                        Pin(start: 0.0, end: 0.0),
                        child: Text(
                          'Home',
                          style: TextStyle(
                            fontFamily: 'Arial',
                            fontSize: 14,
                            color: const Color(0xffa1a0a0),
                            fontWeight: FontWeight.w700,
                          ),
                          textAlign: TextAlign.center,
                        ),
                      ),
                      Pinned.fromPins(
                        Pin(size: 46.0, middle: 0.3024),
                        Pin(start: 0.0, end: 0.0),
                        child: Text(
                          'Stocks',
                          style: TextStyle(
                            fontFamily: 'Arial',
                            fontSize: 14,
                            color: const Color(0xffa1a0a0),
                            fontWeight: FontWeight.w700,
                          ),
                          textAlign: TextAlign.center,
                        ),
                      ),
                      Pinned.fromPins(
                        Pin(size: 38.0, middle: 0.6421),
                        Pin(start: 0.0, end: 0.0),
                        child: Text(
                          'Trade',
                          style: TextStyle(
                            fontFamily: 'Arial',
                            fontSize: 14,
                            color: const Color(0xffa1a0a0),
                            fontWeight: FontWeight.w700,
                          ),
                          textAlign: TextAlign.center,
                        ),
                      ),
                      Pinned.fromPins(
                        Pin(size: 58.0, end: 0.0),
                        Pin(start: 0.0, end: 0.0),
                        child: Text(
                          'Portfolio',
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
                ),
                Pinned.fromPins(
                  Pin(start: 22.0, end: 33.0),
                  Pin(size: 50.0, middle: 0.4211),
                  child:
                      // Adobe XD layer: 'Icons' (group)
                      Stack(
                    children: <Widget>[
                      Pinned.fromPins(
                        Pin(size: 48.0, start: 0.0),
                        Pin(start: 0.0, end: 2.0),
                        child:
                            // Adobe XD layer: 'outline_home_white_…' (shape)
                            Container(
                          decoration: BoxDecoration(
                            image: DecorationImage(
                              image: const AssetImage(''),
                              fit: BoxFit.fill,
                            ),
                          ),
                        ),
                      ),
                      Pinned.fromPins(
                        Pin(size: 48.0, middle: 0.6655),
                        Pin(start: 0.0, end: 2.0),
                        child:
                            // Adobe XD layer: 'outline_toll_white_…' (shape)
                            Container(
                          decoration: BoxDecoration(
                            image: DecorationImage(
                              image: const AssetImage(''),
                              fit: BoxFit.fill,
                            ),
                          ),
                        ),
                      ),
                      Pinned.fromPins(
                        Pin(size: 50.0, middle: 0.3194),
                        Pin(start: 0.0, end: 0.0),
                        child:
                            // Adobe XD layer: 'outline_bar_chart_w…' (shape)
                            Container(
                          decoration: BoxDecoration(
                            image: DecorationImage(
                              image: const AssetImage(''),
                              fit: BoxFit.fill,
                            ),
                          ),
                        ),
                      ),
                      Pinned.fromPins(
                        Pin(size: 48.0, end: 0.0),
                        Pin(start: 0.0, end: 2.0),
                        child:
                            // Adobe XD layer: 'outline_account_bal…' (shape)
                            Container(
                          decoration: BoxDecoration(
                            image: DecorationImage(
                              image: const AssetImage(''),
                              fit: BoxFit.fill,
                            ),
                          ),
                        ),
                      ),
                    ],
                  ),
                ),
              ],
            ),
          ),
        ],
      ),
    );
  }
}
