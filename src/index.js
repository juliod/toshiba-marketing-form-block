import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';

registerBlockType('toshiba-marketing-block/form', {
    edit() {
        const blockProps = useBlockProps();
        return (
            <div {...blockProps}>
                <form>
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" />
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" />
                    </div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        );
    },
    save() {
        const blockProps = useBlockProps.save();
        return (
            <div {...blockProps}>
                <form>
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" />
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" />
                    </div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        );
    },
});