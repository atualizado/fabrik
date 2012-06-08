FbJSPeriodical = new Class({
	Extends: FbElement,
	options: {
		code : '',
		period : 1000
	},

	initialize: function (element, options) {
		this.plugin = 'fabrikPeriodical';
		this.parent(element, options);
		var periodical;

		this.fx = function () {
			eval(this.options.code);
		}.bind(this);
		head.ready(function () {
			this.fx();
			periodical = this.fx.periodical(this.options.period, this);
		}.bind(this));
	}
});