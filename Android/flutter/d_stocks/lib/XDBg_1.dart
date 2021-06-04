import 'package:flutter/material.dart';
import 'package:adobe_xd/pinned.dart';
import 'package:flutter_svg/flutter_svg.dart';

class XDBg_1 extends StatelessWidget {
  XDBg_1({
    Key key,
  }) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return Stack(
      children: <Widget>[
        Pinned.fromPins(
          Pin(start: 0.0, end: 0.0),
          Pin(start: 0.0, end: 0.0),
          child: SvgPicture.string(
            _svg_np5i3b,
            allowDrawingOutsideViewBox: true,
            fit: BoxFit.fill,
          ),
        ),
      ],
    );
  }
}

const String _svg_np5i3b =
    '<svg viewBox="0.0 0.0 393.0 88.0" ><g transform="translate(0.0, -763.0)"><path transform="translate(0.0, 763.0)" d="M 0 0 L 393 0 L 393 88 L 0 88 Z" fill="#0b0e11" stroke="#707070" stroke-width="1" stroke-opacity="0.0" stroke-miterlimit="4" stroke-linecap="butt" /></g></svg>';
