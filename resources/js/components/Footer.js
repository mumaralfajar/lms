import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Link, NavLink } from "react-router-dom";

export default class Footer extends Component {
  render() {
        return (
            <div>
                <div className="site-footer-legal">© 2021 <a href="javascript:void(0)">LMS</a></div>
            </div>
        );
    }
}

