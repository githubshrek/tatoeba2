/**
 * Tatoeba Project, free collaborative creation of multilingual corpuses project
 * Copyright (C) 2014 Gilles Bedel
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

$(document).ready(function() {
    var rootUrl = get_tatoeba_root_url();
    $(document).watch("addrule", function() {
        // For transcriptions marked with class 'blend',
        // replace the sentence content with the transcription
        $('.transcriptionContainer.blend').each(function() {
            var container = $(this);
            var transcr = container.find('.transcription');
            var sentence = container.closest('.sentence').find('.content .text');
            if (sentence.data('text') === undefined) {
                sentence.data('text', sentence.text());
            }
            sentence.html(transcr.html());
            container.toggle(false);

            var isMainSentence = container.closest('.translations').length == 0;
            if (isMainSentence) {
                // Allow to unblend back the transcription and the sentence
                // by clicking on the transcribe button
                var menu = container.closest('.sentences_set').find('.transcribe-buttons');
                var button = container.find('.transcribe.option');
                button.click(function(event) {
                    sentence.text(sentence.data('text'));
                    button.remove();
                    container.toggle(true);
                });
                button.toggle(true);
                menu.empty().append(button);
            }
            container.removeClass('blend');
        });
    });
});
