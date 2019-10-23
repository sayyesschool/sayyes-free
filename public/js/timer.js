(function(window) {
    'use strict';

    function Timer(h, m, s, onTick) {
        this.h = Number(h || 0);
        this.m = Number(m || 0);
        this.s = Number(s || 0);
        this.onTick = onTick;

        this.tick = this.tick.bind(this);
    }

    Timer.formatSegment = function(segment) {
        return segment > 9 ? segment.toString() : '0' + segment;
    };

    Timer.convertToMs = function(h, m, s) {
        return (3600000 * (h || 0)) + (60000 * (m || 0)) + (1000 * (s || 0));
    };

    Timer.prototype = {
        start: function() {
            this.interval = setInterval(this.tick, 1000);
            this.onTick(this);
        },

        pause: function() {
            clearInterval(this.interval);
            this.interval = null;
        },

        stop: function() {
            this.pause();
            this.h = 0;
            this.m = 0;
            this.s = 0;
        },

        tick: function() {
            if (this.h === 0 && this.m === 0 && this.s === 0) {
                this.stop();
                this.onEnd();

                return;
            } else if (this.m === 0 && this.s === 0) {
                this.h -= 1;
                this.m = 59;
                this.s = 59;
            } else if (this.s === 0) {
                this.m -= 1;
                this.s = 59;
            }

            this.s -= 1;

            this.onTick(this);
        },

        toJSON: function() {
            return {
                h: Timer.formatSegment(this.h),
                m: Timer.formatSegment(this.m),
                s: Timer.formatSegment(this.s)
            };
        },

        toString: function() {
            var h = Timer.formatSegment(this.h);
            var m = Timer.formatSegment(this.m);
            var s = Timer.formatSegment(this.s);

            return h + ':' + m + ':' + s;
        }
    };

    window.Timer = Timer;
})(window);