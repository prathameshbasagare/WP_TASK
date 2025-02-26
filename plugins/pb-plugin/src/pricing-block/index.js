import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import block from './block.json';
import './main.css';
import './editor.css';

registerBlockType(block.name, {
    edit({ attributes, setAttributes }) {
        const blockProps = useBlockProps({ className: "pricing-block" });

        return (
            <div {...blockProps}>
                <div className="pricing-table">
                    <div className="table">
                        <div className="pricing-column">
                            <RichText
                                tagName="div"
                                className="price"
                                value={attributes.priceMember}
                                onChange={(value) => setAttributes({ priceMember: value })}
                                placeholder="Enter price"
                            />
                            <div className="label">Member</div>
                        </div>
                        <div className="pricing-column">
                            <RichText
                                tagName="div"
                                className="price"
                                value={attributes.priceNonMember}
                                onChange={(value) => setAttributes({ priceNonMember: value })}
                                placeholder="Enter price"
                            />
                            <div className="label">Non-Member</div>
                        </div>
                    </div>
                    <RichText
                        tagName="a"
                        className="sign-up"
                        href="#"
                        value={attributes.signUpText}
                        onChange={(value) => setAttributes({ signUpText: value })}
                        placeholder="Enter button text"
                    />
                </div>
                <RichText
                    tagName="button"
                    className="apply"
                    value={attributes.applyButtonText}
                    onChange={(value) => setAttributes({ applyButtonText: value })}
                    placeholder="Enter button text"
                />
            </div>
        );
    },

    save({ attributes }) {
        return (
            <div className="pricing-block">
                <div className="pricing-table">
                    <div className="table">
                        <div className="pricing-column">
                            <div className="price">{attributes.priceMember}</div>
                            <div className="label">Member</div>
                        </div>
                        <div className="pricing-column">
                            <div className="price">{attributes.priceNonMember}</div>
                            <div className="label">Non-Member</div>
                        </div>
                    </div>
                    <a href="#" className="sign-up">{attributes.signUpText}</a>
                </div>
                <button className="apply">{attributes.applyButtonText}</button>
            </div>
        );
    }
});
