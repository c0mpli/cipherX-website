import 'package:flutter/material.dart';

class Category extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Material(
      color: Colors.transparent,
      child: Container(
        child: InkWell(
          borderRadius: BorderRadius.circular(50.0),
          highlightColor: Colors.amberAccent,
          splashColor: Colors.amber,
          onTap: () {
            print('tap');
          },
          child: Padding(
            padding: EdgeInsets.all(16.0),
            child: Row(
              crossAxisAlignment: CrossAxisAlignment.stretch,
            children: <Widget>[
              Padding(
                padding: EdgeInsets.only(right: 16.0),
                child: Icon(Icons.cake),
                ),
                Center(
                  child: Text(
                    name,
                    textAlign: TextAlign.center,
                    style: Theme.of(context.textTheme.display1.c),
                  ),
                )
            ],
            ),
            ),
        ),
      ),
    );
  }
}
