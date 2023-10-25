(function (blocks, editor, element) {

   var el = element.createElement;
   blocks.registerBlockType('rrr_rstr/recent-posts', {

      title: 'RRRRRecent posts',
      icon: 'dashicons-admin-post',
      category: 'common',
      attribbutes: {
         'title': {
            type: 'string',
            default: 'Block Title',
         },
         content: {
            type: 'string',
            default: '****************',
         }
      },




      edit: function (props) {
         // var blockProps = useBlockProps();
         // var innerBlocksProps = useInnerBlocksProps();

         return (
            el('div', { className: props.className },
               el(
                  editor.Richtext,
                  {
                     tagName: 'h2',
                     className: 'rstr-recent-posts-title',
                     value: props.attributes.title,
                     onChange: function (content) {
                        props.setAttributes({ title: content });
                     }
                  }
               ),
               el(
                  editor.Richtext,
                  {
                     tagName: 'h2',
                     className: 'rstr-recent-posts-text',
                     value: props.attributes.content,
                     onChange: function (content) {
                        props.setAttributes({ content: content });
                     }
                  }
               )
            )
         );
      },

      save: function (props) {
         // var blockProps = useBlockProps.save();
         // var innerBlocksProps = useInnerBlocksProps.save();

         return (
            el('div', { className: props.className },
               el(editor.Richtext.content, {
                  tagName: 'h2',
                  className: 'rstr-recent-posts-title',
                  value: props.attributes.title,
               }),
               el(editor.Richtext.content, {
                  tagName: 'div',
                  className: 'rstr-recent-posts-text',
                  value: props.attributes.content,
               }),

            )
         );
      },
   });
})(window.wp.blocks, window.wp.editor, window.wp.element);